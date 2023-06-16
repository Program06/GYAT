const template = document.createElement("template")
template.innerHTML = `
     <style>
         h1{
         display: flex;
         justify-content: center;
         align-self: center;
         color: black;
         font-size: 1rem;
         font-family: Garamond;  
         text-align: center;
         margin-top: .5rem;
         }
     </style>
<h1><slot></slot></h1>`

class footerstyleteksteen extends HTMLElement {
    constructor(){
        super()
        const shadow = this.attachShadow({ mode: "open"})
        shadow.append(template.content.cloneNode(true))
    }
}

customElements.define("footer-tekst", footerstyleteksteen)


function toggleHeart(element) {
    element.classList.toggle("clicked");
  }
