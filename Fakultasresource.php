<?php

// app/Filament/Resources/FakultasResource.php

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use App\Models\Fakultas;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Illuminate\Database\Eloquent\Builder;

class FakultasResource extends Resource
{
    protected static ?string $model = Fakultas::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';
    protected static ?string $navigationLabel = 'Data Fakultas';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama_fakultas')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('kode_fakultas')
                ->required()
                ->maxLength(50),
            Forms\Components\Textarea::make('deskripsi')
                ->maxLength(500),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama_fakultas'),
            Tables\Columns\TextColumn::make('kode_fakultas'),
            Tables\Columns\TextColumn::make('deskripsi')->limit(50),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ])->filters([])->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFakultas::route('/'),
            'create' => Pages\CreateFakultas::route('/create'),
            'edit' => Pages\EditFakultas::route('/{record}/edit'),
        ];
    }
}
