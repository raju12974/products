@extends('layouts.app')

@section('content')
    <div class="container flex-column align-items-center" style="height: 100%">
        <button class="btn btn-secondary" id="scan" style="margin: auto 0" onclick="scan()">Scan button</button>
        <div style="width: 300px" id="reader"></div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/qrcode.js"></script>
<script>
    function scan(){
    }

    function onScanSuccess(qrCodeMessage) {
        // handle on success condition with the decoded message
    }

    (function() {
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    })();
</script>
