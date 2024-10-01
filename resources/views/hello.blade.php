<div>
    <x-message-banner />


    {{-- <h1>{{rand(7,23,)}}</h1> --}}

    <!-- Be present above all else. - Naval Ravikant -->
    @include('common.header')

    <h1>Hello</h1>
    <h1>
        <?php echo "hello how are you" ?>
    </h1>
    <style>
        .success {
            font-family: sans-serif;
            font-weight: bold;
            background: lightgreen;
            color: green;
            padding: 10px;
            border-radius: 14px;


        }

        .error {
            font-family: sans-serif;
            font-weight: bold;
            background: rgb(37, 12, 9);
            color: red;
            padding: 10px;
            border-radius: 14px;


        }
    </style>
</div>