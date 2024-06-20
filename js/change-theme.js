const botaoCor = document.getElementById("chk");
const minhaDiv = document.getElementById("start");
let cores = ["#070711", "#e7e6e7"];
let coresTexto = ["rgba(226, 226, 226, 0.8)", "black"];
let coresTextoH1 = ["white", "black"];
let indiceCor = 0;
let textCor = 0;

function trocaModoCor() {
  minhaDiv.style.backgroundColor = cores[indiceCor];

  indiceCor = (indiceCor + 1) % cores.length;

  const textoP = document.getElementsByTagName("p");
  const textoH1 = document.getElementsByTagName("h2");
  const textoH2 = document.getElementsByTagName("h3");
  const textoLI = document.getElementsByTagName("li");

  const texto = [...textoP, ...textoH1, ...textoLI, ...textoH2];

  for (let i = 0; i < texto.length; i++) {
    if (texto[i].tagName == "H2") {
      texto[i].style.color = coresTextoH1[textCor];
    } else {
      texto[i].style.color = coresTexto[textCor];
    }
  }

  textCor = (textCor + 1) % coresTexto.length;
}

const chk = document.getElementById("chk");

chk.addEventListener("change", () => {
  document.body.classList.toggle("dark");
});
