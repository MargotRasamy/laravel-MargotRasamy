<div class="col-lg-3">
    <div class="product-item sm-height bg-gray">
      <a href="{{ route('categories-products-list', $category->id ) }}" class="product-category">{{ $category->name }}</a>
      <img src={{ $category->image }} alt="Image" class="img-fluid">
    </div>
</div>

{{-- {{ route('categories-products-list/3') }} --}}