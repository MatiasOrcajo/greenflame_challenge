<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Green Challenge</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 mt-5">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Voucher#</th>
                                <th scope="col">CBA</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Account Name</th>
                                <th scope="col">Issuer Name</th>
                                <th scope="col">Voucher Status</th>
                                <th scope="col">Past Due</th>
                                <th scope="col">Payment File</th>
                                <th scope="col">Customer's Last Name</th>
                                <th scope="col">Confirmation</th>
                                <th scope="col">Issue IATA</th>
                                <th scope="col">Gross Amount</th>
                                <th scope="col">GSA Net Amount</th>
                                <th scope="col">ABG Net Amount</th>
                                <th scope="col">User</th>
                                <th scope="col">Create Date</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($vouchers as $voucher)
                                <tr>
                                    <th>
                                        {{$voucher->number}}
                                    </th>
                                    <th>
                                        {{$voucher->account}}
                                    </th>
                                    <th>
                                        {{$voucher->company->name}}
                                    </th>
                                    <th>
                                        {{$voucher->organization->name}}
                                    </th>
                                    <th>
                                        {{$voucher->organization->name}}
                                    </th>
                                    <th>
                                        {{$voucher->voucher_status->name}}
                                    </th>
                                    <th>
                                        {{$voucher->past_due == \App\Models\Constants::PAST_DUE_TRUE ? 'Past Due' : ''}}
                                    </th>
                                    <th>
                                        @if($voucher->payment_file)
                                        {{$voucher->payment_file->payment_file_status->name}}
                                        @else
                                        {{"-"}}
                                        @endif
                                    </th>
                                    <th>
                                        {{$voucher->booking->last_name}}
                                    </th>
                                    <th>
                                        {{$voucher->booking->number}}
                                    </th>
                                    <th>
                                        {{$voucher->iata_code}}
                                    </th>
                                    <th>
                                        {{$voucher->gross_amount}}
                                    </th>
                                    <th>
                                        {{$voucher->gsa_amount}}
                                    </th>
                                    <th>
                                        {{$voucher->abg_amount}}
                                    </th>
                                    <th>
                                        {{$voucher->user->name}}{{$voucher->user->last_name}}
                                    </th>
                                    <th>
                                        {{$voucher->issue_date}}
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
</html>
