<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SpeakerController
 */
final class SpeakerControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function index_displays_view(): void
    {
        $speakers = Speaker::factory()->count(3)->create();

        $response = $this->get(route('speakers.index'));

        $response->assertOk();
        $response->assertViewIs('speaker.index');
        $response->assertViewHas('speakers');
    }


    #[Test]
    public function show_displays_view(): void
    {
        $speaker = Speaker::factory()->create();

        $response = $this->get(route('speakers.show', $speaker));

        $response->assertOk();
        $response->assertViewIs('speaker.show');
        $response->assertViewHas('speaker');
    }
}
