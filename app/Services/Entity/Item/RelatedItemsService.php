<?php

namespace App\Services\Entity\Item;

use App\Model\Item\Item;
use Illuminate\Support\Facades\DB;

class RelatedItemsService
{
    const NUM_OF_RELATED_ITEMS = 3;

    public function getRelatedItems($item)
    {
        $relatedItems = DB::table('item')
            ->where('id_category', $item->id_category)
            ->where('id_patent', $item->id_patent)
            ->whereNotIn('id', [$item->id])
            ->limit(self::NUM_OF_RELATED_ITEMS)
            ->inRandomOrder()
            ->get();

        if(count($relatedItems) != self::NUM_OF_RELATED_ITEMS){
            $relatedItems = DB::table('item')
                ->where('id_category', $item->id_category)
                ->whereNotIn('id', [$item->id])
                ->limit(self::NUM_OF_RELATED_ITEMS)
                ->inRandomOrder()
                ->get();
        }

        if(count($relatedItems) != self::NUM_OF_RELATED_ITEMS){
            $relatedItems = DB::table('item')
                ->where('id_patent', $item->id_patent)
                ->whereNotIn('id', [$item->id])
                ->limit(self::NUM_OF_RELATED_ITEMS)
                ->inRandomOrder()
                ->get();
        }

        return $relatedItems;
    }
}



?>
