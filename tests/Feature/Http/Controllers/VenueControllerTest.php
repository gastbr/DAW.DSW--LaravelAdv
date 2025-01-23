<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Venue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\VenueController
 */
final class VenueControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function index_displays_view(): void
    {
        $venues = Venue::factory()->count(3)->create();

        $response = $this->get(route('venues.index'));

        $response->assertOk();
        $response->assertViewIs('venue.index');
        $response->assertViewHas('venues');
    }


    #[Test]
    public function show_displays_view(): void
    {
        $venue = Venue::factory()->create();

        $response = $this->get(route('venues.show', $venue));

        $response->assertOk();
        $response->assertViewIs('venue.show');
        $response->assertViewHas('venue');
    }
}
