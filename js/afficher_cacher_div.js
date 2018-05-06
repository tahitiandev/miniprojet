function afficher_cacher(id)
{
    
    if(document.getElementById(id).style.visibility=="hidden")
    {
        document.getElementById(id).style.visibility="visible";
        document.getElementById('bouton_'+id).innerHTML='&nbsp;&nbsp;Cacher le texte&nbsp;&nbsp;';
    }
    else
    {
        document.getElementById(id).style.visibility="hidden";
        document.getElementById('bouton_'+id).innerHTML='&nbsp;&nbsp;Afficher le texte&nbsp;&nbsp;';
    }
    return true;
}