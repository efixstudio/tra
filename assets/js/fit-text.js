const template = '\n  <div id="outer"><div id="inner"><slot></slot></div></div>\n  <style>\n    #inner {display: inline-block; white-space: nowrap;}\n  </style>\n';
customElements.define(
    "fit-text",
    class extends HTMLElement {
        constructor() {
            super();
            const e = this.attachShadow({ mode: "open" });
            (e.innerHTML = template),
                (this.inner = e.querySelector("#inner")),
                (this.outer = e.querySelector("#outer")),
                (this.resize = this.resize.bind(this)),
                addEventListener("resize", this.resize),
            document.fonts && document.fonts.addEventListener("loadingdone", this.resize);
        }
        disconnectedCallback() {
            removeEventListener("resize", this.resize), document.fonts && document.fonts.removeEventListener("loadingdone", this.resize);
        }
        resize() {
            cancelAnimationFrame(this.af),
                (this.af = requestAnimationFrame(() => {
                    const e = parseInt(getComputedStyle(this.inner).fontSize, 10);
                    this.inner.style.fontSize = `${(this.outer.clientWidth / this.inner.scrollWidth) * e}px`;
                }));
        }
        connectedCallback() {
            this.resize();
        }
    }
);