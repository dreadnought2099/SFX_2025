<!DOCTYPE html>
<html>

<head>
    <title>New Product Created</title>
</head>

<body
    style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f4; padding: 40px; color: #333;">
    <div
        style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); overflow: hidden;">
        <div style="background-color: #4CAF50; padding: 20px;">
            <h2 style="color: #ffffff; margin: 0;">Hello, {{ $user->first_name }}</h2>
        </div>

        <div style="padding: 30px;">
            <p style="font-size: 16px;">We're excited to let you know that a new product has been created successfully.
            </p>

            <div style="margin: 25px 0; padding: 20px; background-color: #f9f9f9; border-left: 5px solid #4CAF50;">
                <h3 style="margin-top: 0; color: #222;">{{ $product->name }}</h3>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            </div>

            {{-- <p style="font-size: 15px;">You can view more details by clicking the button below:</p>

            <p>
                <a href="{{ url('/products/' . $product->id) }}"
                    style="display: inline-block; padding: 12px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 6px; font-weight: bold;">
                    View Product Details
                </a>
            </p> --}}

            <p style="margin-top: 40px;">Best regards,<br><strong style="color: #4CAF50">{{ config('app.name') }}</strong>
            </p>
        </div>
    </div>
</body>

</html>
