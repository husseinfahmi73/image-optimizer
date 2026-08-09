@if(session('success'))
    <x-alert 
        :message="session('success')" 
        type="success"
    />
@endif


@if(session('error'))
    <x-alert 
        :message="session('error')" 
        type="error"
    />
@endif

<div class="text text-center truncate font-bold font-serif text-xl my-4">
    قم بختيار صورة او اسحب الصورة
</div>


<main class="w-full min-h-96 border-primary border-1 rounded-2xl drag">
    <div class="drag  flex flex-col justify-center items-center">
        <form action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="img">
                <img id="preview" src="{{ asset('Images/select_img.png') }}" alt="" class="h-80">
                <span id="file-name" class="text-sm"></span>
            </div>


            <div class="button-img mx-auto flex justify-center items-center mr-10 gap-4">
                <label for="img" class="bg-primary p-2 text-white capitalize rounded-md cursor-pointer">
                    select img
                </label>

                <input type="file" hidden id="img" name="image" accept="image/*">


                <input type="submit" value="send" class="bg-muted py-2 px-8 rounded-md cursor-pointer">
            </div>
        </form>

        <script>

            const input = document.getElementById('img');
            const fileName = document.getElementById('file-name');
            const preview = document.getElementById('preview');


            input.addEventListener('change', function () {

                if (this.files.length > 0) {
                    fileName.innerHTML = this.files[0].name;

                    let reader = new FileReader();

                    reader.onload = function (e) {
                        preview.src = e.target.result;
                    }

                    reader.readAsDataURL(this.files[0]);
                }
            });

        </script>

