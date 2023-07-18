import Swup from 'swup';
import SwupHeadPlugin from '@swup/head-plugin';
import SwupScriptsPlugin from '@swup/scripts-plugin';

const swupInit = () => {
  const containers = ['#main'];
  
  // return if any of the containers are found
  if (containers.some((container) => document.querySelector(container) === null)) return;

  let baseConfig = {
    containers: containers,
    animateHistoryBrowsing: true,
  };

  let basePlugins = [
    new SwupHeadPlugin({
      persistTags: 'style',
    }),
    new SwupScriptsPlugin(),  
  ]

  // if body class contains 'development' or 'staging' add debug plugin
  if (document.body.classList.contains('development') || document.body.classList.contains('staging')) {
    return import('@swup/debug-plugin').then( SwupDebugPlugin => {
   
      return new Swup({...baseConfig, plugins: [...basePlugins, new SwupDebugPlugin.default()] });
    });
  }

  return new Swup({...baseConfig, plugins: basePlugins });
}

export default swupInit;