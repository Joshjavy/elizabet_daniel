document.getElementById('buenosdeseos').addEventListener('submit', handleSubmit);
document.getElementById('formAsistencia').addEventListener('submit', asistencias);


function handleSubmit(event) {
  event.preventDefault();
  const form = document.getElementById('buenosdeseos');

  const formData = new FormData(form);

  axios.post(form.action, formData)
    .then(function (response) {
      // Handle the successful response
      let datos =response.data.data;
      
      let html=`<div class="slider" style="box-shadow:none!important ;border:none!important; ">`
      
      datos.forEach(d=>{
        html+=`
                <div class="text-center text-white">
              <p>"${d.nombre}"</p><br/><br/>

              <p>
                -${d.ffirma} |<br/>
              </p>
              <div class="flex justify-center">
                <p>${d.deseo}</p> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FF3D34" class="w-5">
                <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                </svg>
              </div>
            </div>
        `;
      });
      html+=`</div>`
      console.log(html);
      document.querySelector('.divcarro').innerHTML=html;
      document.querySelector("#buenosdeseos").reset();

       
    })
    .catch(function (error) {
      // Handle the error
      // console.error(error);
    }).
    finally(function(){

      $('.slider').bxSlider({
        controls: false,
        pager:false,
        infiniteLoop:true,
        responsive:true,
        auto:true,
        autoStart:true,
        pause:5000,
    });

    });
}

function asistencias(event) {
  event.preventDefault();
  const form = document.getElementById('formAsistencia');
  const url = form.action;
  const formData = new FormData(form);
  axios
  .post(`${url}`,formData)
  .then(function (response) {
    console.log(response.data.status);
      const sms=`<p class='text-center'>
          Gracias por tu confirmación.
      </p><br/>
      `
      if(response.data.status){
        message(sms)
      }else{
        message(response.data.message)
      }
      
      
  })
  .catch(function (error) {
      // handle error
      message(error.response.data.message)
  })
  .finally(function () {
    document.querySelector("form[name='formAsistencia']").reset()
  });

}
const message=(sms)=>{
  Swal.fire({
    title: "",
    type: "",
    html: `
      <div class=" text-center	pt-20">
        ${sms}
        
      </div>
      <div class="flex justify-center pt-7"><img src="src/images/elementos/iglesia-amarilla.png" class="w-1/4	"/></div>
      `,
    showCloseButton: true,
    showCancelButton: false,
    focusConfirm: true,
    confirmButtonText: "Ok",
    confirmButtonColor: "#905F68",
  });
}