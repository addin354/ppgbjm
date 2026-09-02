<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Desas\DesaResource;
use App\Filament\Resources\Generuses\GenerusResource;
use App\Filament\Resources\Kelompoks\KelompokResource;
use App\Filament\Resources\Pembinaans\PembinaanResource;
use App\Filament\Resources\Pengajars\PengajarResource;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\Widget;

class QuickAccessWidget extends Widget
{
    protected static ?int $sort = -1;

    protected static bool $isLazy = false;

    protected int | string | array $columnSpan = 'full';

    /**
     * @var view-string
     */
    protected string $view = 'filament.widgets.quick-access-widget';

    /**
     * @return array<int, array{label: string, href: string, icon: \BackedEnum|string, color?: string}>
     */
    protected function getActions(): array
    {
        return [
            [
                'label' => 'Ses pembinaan',
                'href' => PembinaanResource::getUrl('create'),
                'icon' => Heroicon::OutlinedPlusCircle,
                'color' => 'primary',
            ],
            [
                'label' => 'Catat generus',
                'href' => GenerusResource::getUrl('create'),
                'icon' => Heroicon::OutlinedUserPlus,
                'color' => 'success',
            ],
            [
                'label' => 'Kelompok',
                'href' => KelompokResource::getUrl('create'),
                'icon' => Heroicon::OutlinedHomeModern,
                'color' => 'gray',
            ],
            [
                'label' => 'Desa',
                'href' => DesaResource::getUrl('create'),
                'icon' => Heroicon::OutlinedMapPin,
                'color' => 'gray',
            ],
            [
                'label' => 'Pengajar',
                'href' => PengajarResource::getUrl('create'),
                'icon' => Heroicon::OutlinedBriefcase,
                'color' => 'info',
            ],
            [
                'label' => 'Semua pembinaan',
                'href' => PembinaanResource::getUrl(),
                'icon' => Heroicon::OutlinedQueueList,
                'color' => 'warning',
            ],
        ];
    }

    protected function getViewData(): array
    {
        return [
            'actions' => $this->getActions(),
        ];
    }
}
