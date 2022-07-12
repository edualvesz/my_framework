//pega pela id do formulario
const cadForm = document.getElementById('#form')

//pega a ação submit do formulario
cadForm.addEventListener('submit', async (e) =>{
    //impede a pagina de recarregar
    e.preventDefault()
    console.log('Cadastrar')
})