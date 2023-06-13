
<div class="p-6 bg-white border-b border-gray-200">
    <form action="{{ route('menus.update' , $menu) }}" method="POST">
        
        @method('PUT')
        @include('menus._form')

    </form>
</div>