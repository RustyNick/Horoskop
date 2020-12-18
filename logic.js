window.addEventListener("load", initsite)
document.getElementById("savebtn").addEventListener("click", setHoroscope)
document.getElementById("getbtn").addEventListener("click", getHoroscope)
document.getElementById("deletebtn").addEventListener("click", deleteHoroscope)


function initsite(){
    getHoroscope()
}

//skicka med ett namn och spara det namnet med hjälp av post
async function setHoroscope(){

    const dateinput = document.getElementById("birthInput").value 
    let month = dateinput[5]+dateinput[6]
    let day = dateinput[8]+dateinput[9]
    console.log(month,day)

    if(!dateinput.length){
        console.log("Du behöver skriva in ett datum")
        return
        
    }

    const body = new FormData()
    body.set("day",day)
    body.set("month",month)

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
    const collectedHorscope = await makeRequest ("./server/deleteHoroscope.php","POST")
    console.log(collectedHorscope)

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