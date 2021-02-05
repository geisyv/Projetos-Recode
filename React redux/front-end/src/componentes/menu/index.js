import React from 'react';
import { useSelector } from 'react-redux';

function Menu() {
    const stateTitulo = useSelector((state)=>state.tituloReducer.titulo);
    return(
        <div><h1>{stateTitulo}</h1></div>
    )    
}

export default Menu;