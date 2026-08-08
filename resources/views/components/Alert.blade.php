@props([
    'message',
    "type"=>"success"

])

<div
    id="custom-toast-alert"
    class="fixed top-5 right-5 z-50 flex items-center gap-3 px-5 py-4 rounded-2xl {{ $type=="success"?"":"bg-red-400" }} text-white backdrop-blur-xl border border-emerald-500/30 shadow-2xl shadow-emerald-500/20 transform translate-x-full opacity-0 transition-all duration-500 ease-out max-w-sm w-full cursor-pointer hover:scale-[1.02]"
    role="alert"
>




    <div class="flex-1 text-sm font-semibold tracking-wide text-slate-100 dir-rtl text-right">
        {{ $message }}
    </div>


    <button
        onclick="hideToastAlert()"
        class="text-slate-400 hover:text-white transition-colors p-1 rounded-lg hover:bg-white/10 cursor-pointer"
        aria-label="Close"
    >
  X
    </button>
</div>

<script>
    function showToastAlert() {
        const toast = document.getElementById('custom-toast-alert');
        if (!toast) return;


        setTimeout(() => {
            toast.classList.remove('translate-x-full', 'opacity-0');
            toast.classList.add('translate-x-0', 'opacity-100');
        }, 100);


        setTimeout(() => {
            hideToastAlert();
        }, 6000);
    }

    function hideToastAlert() {
        const toast = document.getElementById('custom-toast-alert');
        if (!toast) return;

        toast.classList.remove('translate-x-0', 'opacity-100');
        toast.classList.add('translate-x-full', 'opacity-0');
    }

    document.addEventListener("DOMContentLoaded", showToastAlert);
</script>
