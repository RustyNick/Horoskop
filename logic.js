window.addEventListener("load", initsite)
document.getElementById("savebtn").addEventListener("click", setHoroscope)
document.getElementById("getbtn").addEventListener("click", getHoroscope)
document.getElementById("deletebtn").addEventListener("click", deleteHoroscope)

function initsite(){

}

//skicka med ett namn och spara det namnet med hjälp av post
async function setHoroscope(){

    const horoscopeSave = document.getElementById("birthInput").value 

    if(!horoscopeSave.length){
        console.log("Du behöver skriva in ett datum")
        return
        
    }
    
    const body = new FormData()
    body.set("horoscope", horoscopeSave )

    const collectedHorscope = await makeRequest ("./server/addHoroscope.php","POST", body)
    console.log(collectedHorscope)

  
    }

//Hämnta namnet och spara i positionen
async function getHoroscope(){
    const textbox = document.getElementById("textbox")
    const collectedHorscope = await makeRequest ("./server/viewHoroscope.php","GET")
    

    textbox.innerText = collectedHorscope


}
//Tabort horscop i session
async function deleteHoroscope(){

}

async function makeRequest(path,method, body) {
    try{
        const respons = await fetch(path, {
            method,
            body
        })
        console.log(respons)
        return respons.json()
    
    } catch(err) {
        console.error(err)

    }

}

/*Fetch ligger i JS*/