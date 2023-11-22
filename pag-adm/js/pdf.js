const btnPdf= document.getElementById('pdf');

btnPdf.addEventListener("click", () => {
    const conteudo = document.getElementById('dashboard');

    const options = {
        margin:1,
        filename:"arquivo.pdf",
        image: { type: 'jpeg', quality: 0.98 },
        hmtl2canvas:{scale:2},
        jsPDF:{ unit: 'in', format: 'letter', orientation: 'landscape' },
         pagebreak: { mode: 'css,legacy', before: '#page2el' }

    };

    html2pdf().set(options).from(conteudo).save();
})