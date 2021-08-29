<style>
  
  .dropdown{
    display: flex;
    justify-content: flex-end;
    padding: 10px;
  }
</style>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Menú
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>
    <li><a class="dropdown-item" href="{{route('blog')}}">Blog</a></li>
    <li><a class="dropdown-item" href="{{route('contact')}}">Contacto</a></li>
  </ul>
</div>