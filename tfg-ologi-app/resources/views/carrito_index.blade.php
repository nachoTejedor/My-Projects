<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shopping Cart Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /* Estilos CSS */
        body { margin-top: 20px; background: #eee; }
        h3 { font-size: 16px; }
        .text-navy { color: #1ab394; }
        .cart-product-imitation { text-align: center; padding-top: 30px; height: 80px; width: 80px; background-color: #f8f8f9; }
        .product-imitation.xl { padding: 120px 0; }
        .product-desc { padding: 20px; position: relative; }
        .ecommerce .tag-list { padding: 0; }
        .ecommerce .fa-star { color: #d1dade; }
        .ecommerce .fa-star.active { color: #f8ac59; }
        .ecommerce .note-editor { border: 1px solid #e7eaec; }
        table.shoping-cart-table { margin-bottom: 0; }
        table.shoping-cart-table tr td { border: none; text-align: right; }
        table.shoping-cart-table tr td.desc, table.shoping-cart-table tr td:first-child { text-align: left; }
        table.shoping-cart-table tr td:last-child { width: 80px; }
        .ibox { clear: both; margin-bottom: 25px; margin-top: 0; padding: 0; }
        .ibox.collapsed .ibox-content { display: none; }
        .ibox:after, .ibox:before { display: table; }
        .ibox-title { background-color: #ffffff; border-color: #e7eaec; border-style: solid solid none; border-width: 3px 0 0; color: inherit; margin-bottom: 0; padding: 14px 15px 7px; min-height: 48px; }
        .ibox-content { background-color: #ffffff; color: inherit; padding: 15px 20px 20px 20px; border-color: #e7eaec; border-style: solid solid none; border-width: 1px 0; }
        .ibox-footer { color: inherit; border-top: 1px solid #e7eaec; font-size: 90%; background: #ffffff; padding: 10px 15px; }
        .container-img { text-align: center; height: 110px; width: 80px; background-color: #f8f8f9; }
        .container-img img { max-width: 100%; max-height: 100%; }
    </style>
</head>
<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-9">
                    <div class="ibox">
                        <div class="ibox-title">
                            <span class="pull-right">(<strong>{{ $carrito->count() }}</strong>) items</span>
                            <h5>Items in your cart</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table shoping-cart-table">
                                    <tbody>
                                        @foreach ($carrito as $item)
                                            <tr>
                                                <td width="90">
                                                    <div class="container-img">
                                                        <img src="{{ asset('images/' . $item->producto->imagen) }}" alt="{{ $item->producto->nombre }}" />
                                                    </div>
                                                </td>
                                                <td class="desc">
                                                    <h3>
                                                        <a href="#" class="text-navy">
                                                            {{ $item->producto->nombre }}
                                                        </a>
                                                    </h3>
                                                    <p class="small">
                                                        {{ $item->producto->texto }}
                                                    </p>
                                                    <dl class="small m-b-none">
                                                        <dt>Detalles</dt>
                                                    </dl>
                                                    <div class="m-t-sm">
                                                        <a href="#" class="text-muted"><i class="fa fa-gift"></i> Add gift package</a> |
                                                        <form action="{{ route('carrito.eliminar', $item->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link text-muted"><i class="fa fa-trash"></i> Remove item</button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>
                                                    ${{ number_format($item->producto->precio, 2) }}
                                                    @if ($item->producto->precio_anterior)
                                                        <s class="small text-muted">${{ number_format($item->producto->precio_anterior, 2) }}</s>
                                                    @endif
                                                </td>
                                                <td width="65">
                                                    <input type="text" class="form-control" placeholder="1" value="{{ $item->n_productos }}">
                                                </td>
                                                <td>
                                                    <h4>
                                                        ${{ number_format($item->producto->precio * $item->n_productos, 2) }}
                                                    </h4>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <a class="btn btn-primary pull-right" href="/confirmacionCarrito"><i class="fa fa fa-shopping-cart"></i> Checkout</a>
                            <a class="btn btn-white" href="/"><i class="fa fa-arrow-left"></i> Continue shopping</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Cart Summary</h5>
                        </div>
                        <div class="ibox-content">
                            <span>Total</span>
                            <h2 class="font-bold">
                                ${{ number_format($carrito->sum(fn($item) => $item->producto->precio * $item->n_productos), 2) }}
                            </h2>
                            <hr>
                            <span class="text-muted small">
                                *For United States, France and Germany applicable sales tax will be applied
                            </span>
                            <div class="m-t-sm">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Checkout</a>
                                    <a href="#" class="btn btn-white btn-sm"> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Support</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h3><i class="fa fa-phone"></i> +43 100 783 001</h3>
                            <span class="small">
                                Please contact with us if you have any questions. We are available 24h.
                            </span>
                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-content">
                            <p class="font-bold">
                                Other products you may be interested in
                            </p>
                            <hr>
                            <div>
                                <a href="#" class="product-name"> Product 1</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-right">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <a href="#" class="product-name"> Product 2</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-right">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
           {{ session('id_usuario') }}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
