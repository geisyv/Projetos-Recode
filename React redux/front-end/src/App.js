import React from 'react';
import { useSelector, useDispatch } from 'react-redux';
import Menu from './components/menu';

function App() {

  const[inputLista, setInputLista] = React.useState("");
  const [inputTitulo, setInputTitulo] = React.useState("");


  const lista = useSelector((state)=>state.listaReducer.lista);
  const titulo = useSelector((state)=>state.tituloReducer.titulo);
  const dispatch = useDispatch(); 

function adicionarLista(event) {
  event.preventDefault();
  const objLista = {
    nome: inputLista
  }
  dispatch({type: "ADICIONAR", value: objLista});
  
}

function alterarTitulo(event) {
  setInputTitulo(event.target.value);
  dispatch({type: "ALTERAR", value: event.target.value});
  
}


  return (
    <div class="container bg-dark text-white" >
      <form>
      <label>Titulo</label>
      <input placeholder="Digite o titulo da lista" 
      value={inputTitulo} 
      onChange={alterarTitulo}/>
      </form>
      <Menu/>
      <br />
      <form onSubmit={adicionarLista}>
        <input placeholder="Digite um item..." 
        value={inputLista}
        onChange={(event)=>setInputLista(event.target.value)} />

        <button class="btn btn-dark">Enviar</button>
      </form>
      {lista.map((lista, index)=>{
        return(
          <li class="list-group-item list-group-item-dark" key={index}>{lista.nome}</li>
        )
      })}
    </div>
  );
}

export default App;