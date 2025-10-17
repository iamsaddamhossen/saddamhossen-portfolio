// app/page.tsx
export const dynamic = "force-dynamic"; // <- ensures the page is fetched at request time

import { Categories } from "@/components/categories";
import { LatestPosts } from "@/components/latest-posts";
import { SocialIcons } from "@/components/social-icons";
import { getAllPosts, getCategories } from "@/lib/queries";
import Link from "next/link";

export default async function Home() {
  try {
    // Fetch data at request time
    const categories = await getCategories();
    const { posts } = await getAllPosts();

    return (
      <section>
        <SocialIcons />
        <Categories categories={categories} />
        <LatestPosts posts={posts} />
        <div className="text-center mt-8">
          <Link
            href="/blog"
            className="inline-block text-gray-800 font-medium hover:underline"
          >
            View More Posts →
          </Link>
        </div>
      </section>
    );
  } catch (error) {
    console.error("Error fetching data:", error);
    return (
      <section className="text-center py-20">
        <p className="text-gray-500">
          Failed to load content. Please try again later.
        </p>
      </section>
    );
  }
}
