@extends('layouts.email_layout')

@section('email_title', 'aceptacion')

@section('email_content')
    <span class="preheader-text"
        style="color: transparent; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; visibility: hidden; width: 0; display: none; mso-hide: all;"></span>

    <div
        style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">
    </div>

    <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%" style="width:100%;max-width:100%;">
        <tr><!-- Outer Table -->
            <td align="center" bgcolor="#f0f0f0" data-composer>

                <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%"
                    style="width:100%;max-width:100%;">
                    <!-- lotus-header-18-->
                    <tr>
                        <td align="center" bgcolor="#343e9e" class="container-padding">

                            <!-- Content -->
                            <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation"
                                class="row" width="580" style="width:580px;max-width:580px;">
                                <tr>
                                    <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <!-- Logo & Webview -->
                                        <table border="0" align="center" cellpadding="0" cellspacing="0"
                                            role="presentation" width="100%" style="width:100%;max-width:100%;">
                                            <tr>
                                                <td align="center" class="container-padding">

                                                    <!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0" dir="rtl"><tr><td><![endif]-->

                                                    <!-- column -->
                                                    <table border="0" align="right" cellpadding="0" cellspacing="0"
                                                        role="presentation" class="row" width="280"
                                                        style="width:280px;max-width:280px;">
                                                        <tr>
                                                            <td class="center-text" align="right" height="22"
                                                                style="height: 22px;">
                                                                <img mc:edit="mc1"
                                                                    style="width:72px;border:0px;display: inline!important;"
                                                                    src="{{ asset('assets/images/logo/LogoTalentia.png') }}" width="72" border="0"
                                                                    alt="logo">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- column -->

                                                    <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->

                                                    <!-- gap -->
                                                    <table border="0" align="right" cellpadding="0" cellspacing="0"
                                                        role="presentation" class="row" width="20"
                                                        style="width:20px;max-width:20px;">
                                                        <tr>
                                                            <td height="20" style="font-size:20px;line-height:20px;">
                                                                &nbsp;</td>
                                                        </tr>
                                                    </table>
                                                    <!-- gap -->

                                                    <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->

                                                    <!-- column -->
                                                    <table border="0" align="right" cellpadding="0" cellspacing="0"
                                                        role="presentation" class="row" width="280"
                                                        style="width:280px;max-width:280px;">
                                                        <tr>
                                                            <td align="left" class="center-text">
                                                                <img mc:edit="mc1"
                                                                    style="width:72px;border:0px;display: inline!important;"
                                                                    src="{{ asset('assets/images/logo/logo_UMx.png') }}" width="72" border="0"
                                                                    alt="logo">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- column -->

                                                    <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- Logo & Webview -->
                                    </td>
                                </tr>
                                <tr>
                                    <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="center-text" align="center"
                                        style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:42px;line-height:52px;font-weight:400;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;">

                                        <div>
                                            ¡Enhorabuena! Vacante Autorizada
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="center-text" align="center"
                                        style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:26px;line-height:36px;font-weight:400;font-style:normal;color:#d7e057;text-decoration:none;letter-spacing:0px;">

                                        <div>
                                            Estimado/a {{ $empresa->razon_social }}
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="center-text" align="center"
                                        style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:16px;line-height:26px;font-weight:300;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;">

                                        <div>
                                            Tu vacante para {{ $vacante->nombre }} ha sido publicada con éxito
                                            en Talentia. Agradecemos tu confianza en nuestra plataforma para encontrar al
                                            candidato ideal.
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                            <!-- Content -->

                        </td>
                    </tr>
                </table>

                <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%"
                    style="width:100%;max-width:100%;">
                    <!-- lotus-arrow-divider -->
                    <tr>
                        <td align="center" bgcolor="#FFFFFF">
                            <img mc:edit="mc3" style="width:50px;border:0px;display: inline!important;"
                                src="images/Arrow.png" width="50" border="0" alt="arrow">
                        </td>
                    </tr>
                </table>

                <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%"
                    style="width:100%;max-width:100%;">
                    <!-- lotus-content-18 -->
                    <tr>
                        <td align="center" bgcolor="#FFFFFF" class="container-padding">

                            <!-- Content -->
                            <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation"
                                class="row" width="580" style="width:580px;max-width:580px;">
                                <tr>
                                    <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#f4f5fa">
                                        <!-- Content -->
                                        <table border="0" align="center" cellpadding="0" cellspacing="0"
                                            role="presentation" class="row" width="480"
                                            style="width:480px;max-width:480px;">
                                            <tr>
                                                <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <!-- 2-columns -->
                                                    <table border="0" align="center" cellpadding="0" cellspacing="0"
                                                        role="presentation" width="100%"
                                                        style="width:100%;max-width:100%;">
                                                        <tr>
                                                            <td align="center">

                                                                <!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td><![endif]-->

                                                                <!-- column -->
                                                                <table border="0" align="center" cellpadding="0"
                                                                    cellspacing="0" role="presentation" class="row"
                                                                    width="70" style="width:70px;max-width:70px;">
                                                                    <tr>
                                                                        <td align="center">
                                                                            <img mc:edit="mc4"
                                                                                style="display:block;width:100%;max-width:70px;border:0px;"
                                                                                width="70"
                                                                                src=""
                                                                                border="0" alt="icon">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- column -->

                                                                <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->

                                                                <!-- gap -->
                                                                <table border="0" align="left" cellpadding="0"
                                                                    cellspacing="0" role="presentation" class="row"
                                                                    width="30" style="width:30px;max-width:30px;">
                                                                    <tr>
                                                                        <td height="20"
                                                                            style="font-size:20px;line-height:20px;">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- gap -->

                                                                <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->

                                                                <!-- column -->
                                                                <table border="0" align="left" cellpadding="0"
                                                                    cellspacing="0" role="presentation" class="row"
                                                                    width="480" style="width:480px;max-width:480px;">
                                                                    <tr>
                                                                        <td height="5"
                                                                            style="font-size:5px;line-height:5px;">
                                                                            &nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="center-text" align="left"
                                                                            style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:20px;line-height:28px;font-weight:400;font-style:normal;color:#343e9e;text-decoration:none;letter-spacing:0px;">

                                                                            <div>
                                                                                Puesto
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="center-text container-padding"
                                                                            align="left"
                                                                            style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                                                            <div>
                                                                                {{ $vacante->nombre }}
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="5"
                                                                            style="font-size:5px;line-height:5px;">
                                                                            &nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="center-text" align="left"
                                                                            style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:20px;line-height:28px;font-weight:400;font-style:normal;color:#343e9e;text-decoration:none;letter-spacing:0px;">

                                                                            <div>
                                                                                Ubicación
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="center-text container-padding"
                                                                            align="left"
                                                                            style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                                                            <div>
                                                                                {{ $vacante->localizacion }}
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="5"
                                                                            style="font-size:5px;line-height:5px;">
                                                                            &nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="center-text" align="left"
                                                                            style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:20px;line-height:28px;font-weight:400;font-style:normal;color:#343e9e;text-decoration:none;letter-spacing:0px;">

                                                                            <div>
                                                                                Descripción
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="center-text container-padding"
                                                                            align="left"
                                                                            style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                                                            <div>
                                                                                {{ $vacante->descripcion }}
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="5"
                                                                            style="font-size:5px;line-height:5px;">
                                                                            &nbsp;</td>
                                                                    </tr>
                                                                </table>
                                                                <!-- column -->

                                                                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->

                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- 2-columns -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                            </tr>
                                        </table>
                                        <!-- Content -->
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <!-- Paragraphs -->
                                        <table border="0" cellspacing="0" cellpadding="0" role="presentation"
                                            align="center" class="row" width="480" style="width:480px;max-width:480px;">
                                            <tr>
                                                <td class="center-text" align="center"
                                                    style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:26px;font-weight:400;font-style:italic;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                                    <div>
                                                        Ahora cientos de candidatos talentosos podrán ver y postularse a esta
                                                        oportunidad. ¡Te deseamos mucho éxito en tu proceso de selección!
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="center-text" align="center"
                                                    style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:26px;font-weight:400;font-style:italic;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                                    <div>
                                                        Atentamente,<br>El Equipo de Talentía.
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="center-text" align="center"
                                                    style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:26px;font-weight:400;font-style:italic;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                                    <div>
                                                        <br>Éste es un mensaje automático y no es necesario responder.
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- Paragraphs -->
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                            <!-- Content -->

                        </td>
                    </tr>
                </table>

                <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%"
                    style="width:100%;max-width:100%;">
                    <!-- lotus-footer-18 -->
                    <tr>
                        <td align="center" bgcolor="#f0f0f0" class="container-padding">

                            <!-- Content -->
                            <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation"
                                class="row" width="580" style="width:580px;max-width:580px;">
                                <tr>
                                    <td height="50" style="font-size:50px;line-height:50px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <!-- Social Icons -->
                                        <table border="0" align="center" cellpadding="0" cellspacing="0"
                                            role="presentation" width="100%" style="width:100%;max-width:100%;">
                                            <tr>
                                                <td align="center">
                                                    <table border="0" align="center" cellpadding="0" cellspacing="0"
                                                        role="presentation">
                                                        <tr>
                                                            <td class="rwd-on-mobile" align="center" valign="middle"
                                                                height="36" style="height: 36px;">
                                                                <table border="0" align="center" cellpadding="0"
                                                                    cellspacing="0" role="presentation">
                                                                    <tr>
                                                                        <td width="10"></td>
                                                                        <td align="center">
                                                                            <img mc:edit="mc4"
                                                                                style="width:36px;border:0px;display: inline!important;"
                                                                                src="images/Facebook.png" width="36"
                                                                                border="0" alt="icon">
                                                                        </td>
                                                                        <td width="10"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td class="rwd-on-mobile" align="center" valign="middle"
                                                                height="36" style="height: 36px;">
                                                                <table border="0" align="center" cellpadding="0"
                                                                    cellspacing="0" role="presentation">
                                                                    <tr>
                                                                        <td width="10"></td>
                                                                        <td align="center">
                                                                            <img mc:edit="mc5"
                                                                                style="width:36px;border:0px;display: inline!important;"
                                                                                src="images/Instagram.png" width="36"
                                                                                border="0" alt="icon">
                                                                        </td>
                                                                        <td width="10"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td class="rwd-on-mobile" align="center" valign="middle"
                                                                height="36" style="height: 36px;">
                                                                <table border="0" align="center" cellpadding="0"
                                                                    cellspacing="0" role="presentation">
                                                                    <tr>
                                                                        <td width="10"></td>
                                                                        <td align="center">
                                                                            <img mc:edit="mc6"
                                                                                style="width:36px;border:0px;display: inline!important;"
                                                                                src="images/Twitter.png" width="36"
                                                                                border="0" alt="icon">
                                                                        </td>
                                                                        <td width="10"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td class="rwd-on-mobile" align="center" valign="middle"
                                                                height="36" style="height: 36px;">
                                                                <table border="0" align="center" cellpadding="0"
                                                                    cellspacing="0" role="presentation">
                                                                    <tr>
                                                                        <td width="10"></td>
                                                                        <td align="center">
                                                                            <img mc:edit="mc7"
                                                                                style="width:36px;border:0px;display: inline!important;"
                                                                                src="images/Pinterest.png" width="36"
                                                                                border="0" alt="icon">
                                                                        </td>
                                                                        <td width="10"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- Social Icons -->
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="center-text" align="center"
                                        style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                        <div>
                                            Anillo Vial III Poniente No. 172, Col. Saldarriaga,<br>
                                            C.P. 76240, El Marqués, Querétaro.<br>
                                            <!-- Tel. 442 -40 21 000<br> -->
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="center-text" align="center"
                                        style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                        <a href="tel:(442) 402-1000" style="color:#6e6e6e;"><span>(442)
                                                402-1000</span></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="center-text" align="center"
                                        style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                        <a href="mailto:sistemas@mondragonmexico.edu.mx"
                                            style="color:#6e6e6e;"><span>sistemas@mondragonmexico.edu.mx</span></a> - <a
                                            href="http://www.mondragonmexico.edu.mx"
                                            style="color:#6e6e6e;"><span>www.mondragonmexico.edu.mx</span></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="center-text" align="center"
                                        style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                                        <p> Conoce nuestra política de privacidad en
                                            <a href="http://talentia.mondragonmexico.edu.mx/avisodeprivacidad"
                                                style="color:#6e6e6e;"><span>talentia.mondragonmexico.edu.mx/avisodeprivacidad</span></a>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
                                </tr>
                            </table>
                            <!-- Content -->

                        </td>
                    </tr>
                </table>

            </td>
        </tr><!-- Outer-Table -->
    </table>
@endsection