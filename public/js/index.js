

const sampul = document.getElementById('sampul')
const imgPreview = document.querySelector('#gambar');

sampul.addEventListener('change',function(e){
    // console.log(sampul.files[0].name);
    
    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);
    fileSampul.onload = function(e){
        imgPreview.src = e.target.result
    }
})