// if(window.location.protocol == 'http:'){
//     window.location.href = window.location.href.replace('http:', 'https:');
//     window.stop();
// }

function getRoot(PastaInterna=null){
    if(PastaInterna!==null){
        if(PastaInterna.indexOf("/")==0){
            return "https://"+document.location.hostname+PastaInterna;
        }else{
            return "https://"+document.location.hostname+"/"+PastaInterna;
        }
    }else{
        return "https://"+document.location.hostname+"/";
    }
}

function getURL(){
    return window.location.pathname;
}