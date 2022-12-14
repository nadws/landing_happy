<div class="bg-white rounded p-5 " >
    <h3 class="mb-4 text-center" data-bs-toggle="tooltip" data-bs-placement="top"
    data-bs-custom-class="custom-tooltip"
    data-bs-title="teks 1">{{ $teks_janji1 }}</h3>
    <p style="color: #34364A" data-bs-toggle="tooltip" data-bs-placement="top"
    data-bs-custom-class="custom-tooltip"
    data-bs-title="Teks 2">{{ $teks_janji2 }}</p>

    <h5 style="text-align: left">Detail Pembayaran</h5>
    <table width="70%">
        <tr>
            <td data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip"
              data-bs-title="nominal appointment" style="text-align: left">Appointment</td>
            <td style="text-align: right">{{ number_format($nominal_app,0) }}</td>
        </tr>
        <tr>
            <td style="text-align: left">Total Transfer</td>
            <th data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip"
              data-bs-title="nominal transfer" style="text-align: right;color: #34364A">{{ number_format($nominal_tf,0) }}</th>
        </tr>
    </table>
    
    <h5 style="text-align: left" class="mt-3 mb-3">Transfer pembayaran</h5>
    <span data-bs-toggle="tooltip" data-bs-placement="top"
    data-bs-custom-class="custom-tooltip"
    data-bs-title="Bank 1">
      <img src="{{ asset('assets') }}/img_awal/logo_bank_bca.png" alt="" width="90px" style="text-align: left">
      <p>(Admin {{ ucwords($bca_admin) }}) <br>
          <span style="font-weight: bold; color: #34364A">{{ $bca_norek }}</span>
      </p>
    </span>
    <span data-bs-toggle="tooltip" data-bs-placement="top"
    data-bs-custom-class="custom-tooltip"
    data-bs-title="Bank 2">
    <img src="{{ asset('assets') }}/img_awal/logo_bank_mandiri.png" alt="" width="90px"
        style="text-align: left">
    <p>(Admin {{ ucwords($mandiri_admin) }}) <br>
        <span style="font-weight: bold; color: #34364A">{{ $mandiri_norek }}</span>
    </p>
    </span>
    <p style="color: #34364A">konfirmasi pembayaran ke nomer berikut ini:</p>
    
    <table data-bs-toggle="tooltip" data-bs-placement="top"
    data-bs-custom-class="custom-tooltip"
    data-bs-title="Admin & No Whatsapp" width="70%">
        <tr>
            <td style="text-align: left">Admin</td>
            <td style="text-align: right">{{ ucwords($wa_admin) }}</td>
        </tr>
        <tr>
            <td style="text-align: left">No. WhatsApp</td>
            <td style="text-align: right;">{{ $wa_nohp }}</td>
        </tr>
    </table>

</div>