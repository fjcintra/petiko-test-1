// Implemente a função removeProperty, que recebe um objeto e o nome de uma propriedade.

// Faça o seguinte:

// Se o objeto obj tiver uma propriedade prop, a função removerá a propriedade do objeto e retornará true;
// em todos os outros casos, retorna falso.

function removeProperty(obj, prop) {
  if ($(obj).attr(prop)){
    $(obj).removeAttr(prop)
    return true
  }
  else 
    return false
}

let r = removeProperty($("#el01"), "abaco")
console.log(r)