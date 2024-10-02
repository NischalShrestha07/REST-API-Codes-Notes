<div>
    {{-- <span class="success">User Login Successfully.</span>
    <span class="error">Sign In Successfully.</span>
    <span class="warning">Somthing went wrong.</span> --}}




    <span class="{{$class}}">User Login Successfully.</span>
    <span class="{{$class}}">Sign In Successfully.</span>
    <span class="{{$class}}">Somthing went wrong.</span>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
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
        background: rgb(234, 100, 85);
        color: rgb(246, 184, 184);
        padding: 10px;
        border-radius: 14px;


    }

    .warning {
        font-family: sans-serif;
        font-weight: bold;
        background: rgb(219, 149, 20);
        color: orange;
        padding: 10px;
        border-radius: 14px;


    }
</style>