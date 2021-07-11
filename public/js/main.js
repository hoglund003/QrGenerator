function checkRadioButtons(){
    var btnradio1 = document.getElementById('btnradio1');
    var btnradio2 = document.getElementById('btnradio2');
    var workspace = document.getElementById('workspace');
    
    if(btnradio1.checked){
        workspace.innerHTML = document.getElementById('text-section').innerHTML
    }
    if(btnradio2.checked){
        workspace.innerHTML = document.getElementById('phone-number-section').innerHTML;
    }
}

var hidden_content = document.getElementById('hidden-content');

document.getElementById('visible-content').innerHTML = hidden_content.innerHTML;