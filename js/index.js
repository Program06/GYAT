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
  



  //date boeking


  const datumInput = document.getElementById('datum');
const geselecteerdeDatum = document.getElementById('geselecteerde-datum');

datumInput.addEventListener('input', function() {
  const gekozenDatum = new Date(this.value);
  const dag = gekozenDatum.getDate();
  const maand = gekozenDatum.getMonth() + 1; // Maanden worden zero-based weergegeven
  const jaar = gekozenDatum.getFullYear();

  geselecteerdeDatum.textContent = `Geselecteerde datum: ${dag}-${maand}-${jaar}`;
});
