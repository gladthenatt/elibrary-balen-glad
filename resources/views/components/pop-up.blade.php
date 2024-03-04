<div id="containerPop" class="fixed inset-0 z-[100] hidden items-center justify-center bg-white bg-opacity-50 backdrop-blur-md">
        <div class="innerContainer h-auto max-h-[95%] w-full max-w-[95%] md:max-w-[50%] lg:max-w-[35%] flex flex-col gap-6 overflow-auto rounded-[30px] bg-white px-6 md:px-9 lg:px-16 xl:px-[72px] py-[28px] relative" style="box-shadow: 0px 4px 20px 2px rgba(0, 0, 0, 0.25);">
            <img src="{{asset('img/icons/Warning_Sign.svg')}}" class="h-16 w-16 object-contain self-center"/>
            <div class="flex flex-col w-full gap-4">
                <p class="text-center text-[24px]">Peminjaman buku anda sedang diproses!</p>
                <p class="text-center text-[20px] lg:px-6 xl:px-12">Anda dapat menutup jendela ini, pesanan anda tetap kami proses</p>
            </div>
            <button id="containerPop" class="bg-[#1e5eff] py-2 px-5 w-fit self-end text-[20px] text-white rounded-md mt-8" onclick="{{$onClose ? $onClose : ''}}">Kembali</button>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('containerPop').addEventListener('click', function(event) {
            if (!event.target.closest('.innerContainer') || event.target.matches('#containerPop button')) {
                document.getElementById('containerPop').style.display = 'none';
            }
        });
    });
</script>