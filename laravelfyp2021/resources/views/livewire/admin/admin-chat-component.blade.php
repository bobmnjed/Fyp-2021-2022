<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('chat')
            </div>
        </div>
    </div>
</div>
@livewireScripts
<script>
    function scrollDown(){
      document.getElemetById('chat').scrollTop = document.getElemetById('chat').scrollHeight
    }
    setInterval(scrollDown,1000);
  </script>