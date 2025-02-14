@php
    $invoiceSection = DB::table('email_content')->where('section_name', 'invoice_section')->first();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
  <div style="text-align: center; margin-bottom: 20px;">
    <img src="{{ asset('/assets/images/email_wpn-logo.png') }}" 
         alt="Logo" 
         style="width: 50%; margin: 0 auto; display: block;"/>
    <h3 style="margin-top: 20px;">Invoice</h3>
    <p><strong>Invoice number:</strong> {{ $member->invoice_number }}</p>
  </div>

  <div>
    <p><strong>Member name:</strong>{{ $member->name }}</p>
    <p><strong>Institution:</strong>{{ $member->institution }}</p>
    <p><strong>E-mail Address:</strong> {{ $member->email }}</p>
    <p><strong>VAT number:</strong> {{ $member->vat_number }}</p>
    <p><strong>Date:</strong> {{ now()->format('jS F Y') }}</p>
  </div>
    
  <div>
    {!! $invoiceSection->content !!}
  </div>
</body>
</html>
