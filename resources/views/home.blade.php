<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
        <div class="mt-1">

            <div class="text-center">
   
       <img src="{{ asset('images/pic1.jpg')}}" alt="" width="250px" height="150px" class="img-thumbnail">
            </div>
            <div class="mt-5 text-white mx-5 text-justify">
   <h1 class="fw-bold st-font">Hello ,</h1>
  <div class="px-4" style="line-height:2em;">
    <p class="text-indent:100px;">
       I Am <b class="text-warning"> Sonam Kapoor</b> having 5 years of full-stack web development experience for global businesses, I offer the technical expertise you are seeking for your web developer position.</p>
                <p>Since earning my bachelor’s degree in internet and web development from XYZ University, I have served as a web developer at <b class="text-warning">GeekyShows Technology</b>, one of biggest premier digital marketing and web development firm. In this position, I have led web development projects for clients in diverse industries including technology, manufacturing, pharmaceutical, hospitality, retail and financial services.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet sapiente reiciendis numquam optio? Enim eligendi quae ducimus ipsam consectetur dicta veritatis sunt. Pariatur vel modi alias eum ducimus nam temporibus.</p>
    </p>

  </div>
<div class="text-center">
    <a href="{{ route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
    <a href="{{ route('contact')}}" class="btn btn-outline-info mx-5 my-3">Contact</a>
</div>

</div>

        </div>
    </x-slot>
    {{-- <x-slot name='subcontent'>
    Hello This is Subcontent
    </x-slot> --}}
</x-layout>