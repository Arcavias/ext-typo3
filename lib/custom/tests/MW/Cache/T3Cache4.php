<?php

interface t3lib_cache_frontend_Frontend
{
}


class T3Cache implements t3lib_cache_frontend_Frontend
{
	public function flush()
	{
	}

	public function flushByTag( $tag )
	{
	}

	public function get( $key )
	{
	}

	public function getByTag( $tag )
	{
	}

	public function remove( $key )
	{
	}

	public function set( $key, $value, array $tags, $expire )
	{
	}
}
