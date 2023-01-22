@extends('master.template')

@section('title', 'pickup')

@section('body')

<div class="d-flex flex-wrap justify-content-center">
    <div class="card mb-3 mt-4 w-75">
    <div class="d-flex flex-wrap justify-content-center">
        <div class="card mb-3 mt-4 w-75">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Book title</h5>
                        <p class="card-text">ISBN</p>
                        <small class="text-muted">Borrow date:</small>
                        <br>
                        <small class="text-muted">Return date:</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="m-4">
            <p>Choose pick-up method</p>
            <div class="m-4">
                <input type="radio" class="btn-check" name="options" id="self" autocomplete="off">
                <label class="btn btn-outline-secondary" for="self">Self Pick-Up</label>
                
                <input type="radio" class="btn-check" name="options" id="courier" autocomplete="off">
                <label class="btn btn-outline-secondary" for="courier">Courier Pick-Up</label>
                <div id="ifSelf" style="visibility:hidden">
                Please pick-up the book within 24 hour.
                </div>
                <div id="ifCourier" style="visibility:hidden">
                Choose your Courier.
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function pickupCheck() {
        if (pickup.getElementById('self').checked) {
            pickup.getElementById('ifSelf').style.visibility = 'visible';
        } if (pickup.getElementById('courier').checked) {
            pickup.getElementById('ifCourier').style.visibility = 'visible';
        }
    }
</script>

@endsection
