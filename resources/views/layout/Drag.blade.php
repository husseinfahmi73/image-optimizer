<div class="text text-center truncate font-bold font-serif text-xl my-4">
قم بختيار صورة او اسحب الصورة
</div>
<main class="w-full min-h-96 border-primary border-1 rounded-2xl drag">

<div class="drag  flex flex-col justify-center items-center" >
<form action="" method="post">

<div class="img" >
<img src="{{ asset("Images/select_img.png") }}" alt="" class="h-80">

</div>
<div class="button-img mx-auto  flex justify-center items-center mr-10 gap-4">
    <label for="img" class="bg-primary p-2 text-white capitalize rounded-md">select img</label>
    <input type="file" hidden class="" id="img" >
    <input type="submit" value="send" class="bg-muted py-2 px-8 rounded-md ">
</div>


</form>

</div>



</main>
<script>
let drag=document.querySelector(".drag");
let img=document.getElementById("img");
drag.addEventListener("dragover",(event)=>{event.preventDefault()});
drag.addEventListener("drop", (event) => {
    event.preventDefault();



    let files=event.dataTransfer.files;
    if(files.length >0){


img.files=files;

    }
});

</script>
