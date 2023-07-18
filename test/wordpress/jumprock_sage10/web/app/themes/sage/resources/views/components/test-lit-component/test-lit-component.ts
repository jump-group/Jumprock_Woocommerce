import {LitElement, html} from 'lit';

export class TestLitComponent extends LitElement {
  // render method is required by LitElement
  render() {
    return html`
      <slot @slotchange=${this.handleSlotChange}></slot>
    `;
  }

  handleSlotChange() {
  }

  connectedCallback() {
    super.connectedCallback();
  }
  
  disconnectedCallback() {
    super.disconnectedCallback();
  }
}

// Define the new custom element only if it's not already defined
if (!customElements.get('test-lit-component'))
  customElements.define('test-lit-component', TestLitComponent);