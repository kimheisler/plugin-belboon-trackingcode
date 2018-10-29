<?php

namespace BelboonTrackingCode\Providers;

use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class BelboonTrackingCodeBasketProvider
{
    public function call( Twig $twig, ConfigRepository $configRepository )
    {
        return $twig->render('BelboonTrackingCode::BelboonTrackingCodeBasketProvider', [
            'belboonProgramId' => $configRepository->get('BelboonTrackingCode.belboonProgramId')
        ]);
    }
}

class BelboonTrackingCodeOrderConfirmationProvider
{
    public function call( Twig $twig, ConfigRepository $configRepository )
    {
        return $twig->render('BelboonTrackingCode::BelboonTrackingCodeOrderConfirmationProvider', [
            'belboonProgramId' => $configRepository->get('BelboonTrackingCode.belboonProgramId')
        ]);
    }
}