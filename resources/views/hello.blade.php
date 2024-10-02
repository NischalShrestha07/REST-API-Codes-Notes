<div>
    <x-message-banner class="success" msg="Hello User " />

    {{-- <h1>{{rand(7,23,)}}</h1> --}}

    <!-- Be present above all else. - Naval Ravikant -->
    @include('common.header')

    <h1>Hello</h1>
    <h1>
        <?php echo "hello how are you" ?>
    </h1>
    <h3 class="error    ">Aba Chalca hai ta</h3>

    <x-message-banner $message="Password is Incorrect." />

</div>