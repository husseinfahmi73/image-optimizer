<div class="text text-center truncate font-bold font-serif text-xl my-4">
قم بختبار صورة او اسحب الصورة
</div>
<main class="w-full min-h-96 border-primary border-1 rounded-2xl">

<div class="drag  flex flex-col justify-center items-center" >
<form action="" method="post">

<div class="img" >
<img src="{{ asset("Images/select_img.png") }}" alt="" class="h-80">

</div>
<div class="button-img mx-auto  flex justify-center items-center mr-10">
    <label for="img" class="bg-primary p-2 text-white capitalize rounded-md">select img</label>
    <input type="file" hidden class="" id="img">
</div>


</form>

</div>



</main>
