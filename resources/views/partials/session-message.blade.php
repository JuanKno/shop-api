@if (session()->has('success'))
<script>
    toastr.success("{{session('success')}}", "Hecho!");
</script>
@elseif(session()->has('info'))
<script>
    toastr.info("{{session('info')}}", "Atención!");
</script>
@elseif(session()->has('warning'))
<script>
    toastr.warning("{{session('info')}}", "Cuidado!");
</script>
@elseif(session()->has('error'))
<script>
    toastr.error("{{session('error')}}", "Error!");
</script>
@endif