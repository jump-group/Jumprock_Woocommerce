// @ts-check

/**
 * Build configuration
 *
 * @see {@link https://bud.js.org/guides/getting-started/configure}
 * @param {import('@roots/bud').Bud} app
 * 
 */

import { config } from 'dotenv'

const variables = config({
    path: '../../../../.env'
}).parsed;

export default async(app) => {
    app.setPath({
        '@certs': app.path('../../../../docker/certs'),
    })

    app.runtime(false)
    app.splitChunks(true)

    app.extensions
    .get('@roots/bud-typescript/typecheck')
    .setOption('async', true)
    .setOption('typescript', (options) => ({
      ...options,
      configFile: app.path('tsconfig.json'),
    }))

    app.extensions.get('@roots/bud-typescript/typecheck').enabled = true
    
    const blocks = () => {
        const blockFiles = {};
        app.globSync('@src/views/blocks/**/*.{js,ts,scss}').forEach((file) => {
            let name = file.split('/').slice(-2)[0];
            // if blockFiles[name] is undefined, set it to an empty array
            blockFiles[name] = blockFiles[name] || [];
            blockFiles[name].push(file);
        });
        return blockFiles;
    }

    const components = () => {
        const componentFiles = {};
        app.globSync('@src/views/components/**/*.{js,ts,scss}').forEach((file) => {
            let name = file.split('/').slice(-2)[0];
            // if blockFiles[name] is undefined, set it to an empty array
            componentFiles[name] = componentFiles[name] || [];
            componentFiles[name].push(file);
        });
        return componentFiles;
    }

    const components_entries = await app.glob("@src/views/components/**/*.{js,ts,scss}")

    app
    /**
     * Application entrypoints
     */
    .entry({
        app: ["@scripts/app", "@styles/app", ...components_entries],
        editor: ["@scripts/editor", "@styles/editor"],
        // ... blocks(),
        // ... components(),
    })

    /**
     * Directory contents to be included in the compilation
     */
    .assets(["images"])

    /**
     * Matched files trigger a page reload when modified
     */
    .watch(["resources/views/**/*", "app/**/*"])

    /**
     * Proxy origin (`WP_HOME`)
     */
    .proxy(variables.WP_HOME)

    /**
     * Development origin
     */
    .serve({
        host: 'localhost:3000',
        key: app.path('@certs/site.test-key.pem'),
        cert: app.path('@certs/site.test.pem'),
    })

    /**
     * URI of the `public` directory
     */
    .setPublicPath("/app/themes/sage/public/");
};