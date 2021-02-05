import {combineReducers} from 'redux';

const initialState = {
    lista:[]
}

function listaReducer(state = initialState, action) {
    if(action.type === "ADICIONAR"){
        return {lista: [...state.lista, {...action.value}]}
    }
    else{
        return state;
    }
}

function tituloReducer(state = {titulo: "Lista"}, action) {
    if(action.type === "ALTERAR"){
        return {titulo: action.value};
    }
    else{
        return state;
    }
    
}

const reducers = combineReducers({listaReducer, tituloReducer});

export default reducers;