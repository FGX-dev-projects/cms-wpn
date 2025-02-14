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

  <div >
    <p><strong>Member name:</strong>{{ $member->name }}</p>
    <p><strong>Company:</strong> {{ $member->name }}</p>
    <p><strong>Address:</strong>{{ $member->invoice_address }}</p>
    <p><strong>E-mail Address:</strong> {{ $member->invoice_email }}</p>
    <p><strong>VAT number:</strong> {{ $member->vat_number }}</p>
    <p><strong>Date:</strong> {{ now()->format('jS F Y') }}</p>
  </div>
    
  <div >
    <h3 style="font-weight: bold;">WPN - 2024 Membership Fee: R550.00</h3><br>
    <p>When effecting the EFT, please use invoice number or your name as the reference.</p>
    <p>Payment is due within 60 days of receipt of this invoice.</p>
  <br><br>
    <p><strong>Account name:</strong> WPN</p>
    <p><strong>Bank:</strong> Nedbank</p>
    <p><strong>Account number:</strong> 1469091976</p>
    <p><strong>Type of account:</strong> Current</p>
    <p><strong>Branch sort code:</strong> 198765</p>
    <p><strong>Branch name:</strong> Durbanville Western</p>
    <br><br>
    <p>Women's Property Network<br>
    PO Box 1461<br>
    Kloof 3640<br>
    <strong>T:</strong> 031 764 4645<br>
    <strong>E:</strong> <a href="mailto:info@wpn.co.za" style="color: #0073e6;">info@wpn.co.za</a><br>
    <strong>W:</strong> <a href="http://www.wpn.co.za" style="color: #0073e6;">www.wpn.co.za</a></p>
  </div>
</body>
</html>
