<?php

interface T3lib_Cache_Frontend_Frontend
{
}


class T3Cache implements T3lib_Cache_Frontend_Frontend
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
