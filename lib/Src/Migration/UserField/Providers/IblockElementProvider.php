<?php

namespace Base\Module\Src\Migration\UserField\Providers;

class IblockElementProvider extends UserFieldProvider
{
    public const DISPLAY_TYPE_DIALOG = 'DIALOG';
    public const DISPLAY_TYPE_UI = 'UI';
    public const DISPLAY_TYPE_LIST = 'LIST';
    public const DISPLAY_TYPE_CHECKBOX = 'CHECKBOX';


    public static function getType(): string
    {
        return 'iblock_element';
    }

    public function setIblockId(int $iblockId): self
    {
        $this->settings['IBLOCK_ID'] = $iblockId;
        return $this;
    }

    public function setDefaultValue(int $value): self
    {
        $this->settings['DEFAULT_VALUE'] = $value;
        return $this;
    }

    public function setDisplay(string $display): self
    {
        $this->settings['DISPLAY'] = $display;
        return $this;
    }

    public function setListHeight(int $height): self
    {
        $this->settings['LIST_HEIGHT'] = $height;
        return $this;
    }

    public function setShowOnlyActive(bool $value): self
    {
        $this->settings['ACTIVE_FILTER'] = $value;
        return $this;
    }
}
