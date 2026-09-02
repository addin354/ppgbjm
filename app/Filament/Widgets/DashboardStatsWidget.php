<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Desas\DesaResource;
use App\Filament\Resources\Generuses\GenerusResource;
use App\Filament\Resources\GenerusTargets\GenerusTargetResource;
use App\Filament\Resources\Kelompoks\KelompokResource;
use App\Filament\Resources\MateriPengajians\MateriPengajianResource;
use App\Filament\Resources\Pembinaans\PembinaanResource;
use App\Filament\Resources\Pengajars\PengajarResource;
use App\Filament\Resources\TargetPembinaans\TargetPembinaanResource;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStatsWidget extends StatsOverviewWidget
{
    protected static ?int $sort = -2;

    protected static bool $isLazy = false;

    protected ?string $heading = 'Ringkasan data';

    protected ?string $description = 'Sentuh kartu untuk membuka halaman daftar yang bersangkutan.';

    protected int | string | array $columnSpan = 'full';

    /**
     * @return array<Stat>
     */
    protected function getStats(): array
    {
        return [
            Stat::make('Desa', self::safeCountForResource(DesaResource::class))
                ->description('wilayah pembinaan')
                ->descriptionIcon(Heroicon::OutlinedMapPin)
                ->icon(Heroicon::OutlinedBuildingOffice)
                ->color('primary')
                ->url(DesaResource::getUrl()),

            Stat::make('Kelompok', self::safeCountForResource(KelompokResource::class))
                ->description('satuan pembinaan')
                ->descriptionIcon(Heroicon::OutlinedUserGroup)
                ->icon(Heroicon::OutlinedHomeModern)
                ->color('gray')
                ->url(KelompokResource::getUrl()),

            Stat::make('Generus', self::safeCountForResource(GenerusResource::class))
                ->description('peserta didik aktif dalam data')
                ->descriptionIcon(Heroicon::OutlinedAcademicCap)
                ->icon(Heroicon::OutlinedAcademicCap)
                ->color('success')
                ->url(GenerusResource::getUrl()),

            Stat::make('Pengajar / Mubaligh', self::safeCountForResource(PengajarResource::class))
                ->description('pic kelompok & materi')
                ->descriptionIcon(Heroicon::OutlinedUserCircle)
                ->icon(Heroicon::OutlinedBriefcase)
                ->color('info')
                ->url(PengajarResource::getUrl()),

            Stat::make('Sesi pembinaan', self::safeCountForResource(PembinaanResource::class))
                ->description('jadwal yang tercatat')
                ->descriptionIcon(Heroicon::OutlinedCalendarDays)
                ->icon(Heroicon::OutlinedCalendarDays)
                ->color('warning')
                ->url(PembinaanResource::getUrl()),

            Stat::make('Progress target generus', self::safeCountForResource(GenerusTargetResource::class))
                ->description('rekam jejak pembinaan per target')
                ->descriptionIcon(Heroicon::OutlinedChartBar)
                ->icon(Heroicon::OutlinedChartBarSquare)
                ->color('danger')
                ->url(GenerusTargetResource::getUrl()),

            Stat::make('Materi pengajian', self::safeCountForResource(MateriPengajianResource::class))
                ->description('referensi pembinaan')
                ->descriptionIcon(Heroicon::OutlinedBookOpen)
                ->icon(Heroicon::OutlinedBookOpen)
                ->color('gray')
                ->url(MateriPengajianResource::getUrl()),

            Stat::make('Target pembinaan', self::safeCountForResource(TargetPembinaanResource::class))
                ->description('indikator pencapaian')
                ->descriptionIcon(Heroicon::OutlinedFlag)
                ->icon(Heroicon::OutlinedFlag)
                ->color('gray')
                ->url(TargetPembinaanResource::getUrl()),
        ];
    }

    protected static function safeCountForResource(string $resourceClass): int|string
    {
        try {
            /** @phpstan-ignore-next-line */
            $model = $resourceClass::getModel();

            if (! class_exists($model)) {
                return '—';
            }

            /** @phpstan-ignore-next-line */
            return $model::query()->count();
        } catch (\Throwable) {
            return '—';
        }
    }
}
