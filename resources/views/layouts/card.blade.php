<div class="col-sm-6 col-md-4">

    <div class="card" style="width: 18rem;">
        <img src="{{ asset($product->img) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->title }}</h5>
            <p class="card-text">{{ $product->category->name  }}</p>
            <p class="card-text">{{ $product->description }}</p>
            <form action="{{ route('basketAdd', $product->id) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            <a href="{{ route('product',[$product->category->name, $product->title]) }}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
