import { Categories } from "@/components/categories";
import { FullWidthSection } from "@/components/fullwidthsection";
import { HowIDo } from "@/components/howido";
import { LatestPosts } from "@/components/latest-posts";
import { SocialIcons } from "@/components/social-icons";
import { Testimonial } from "@/components/testimonial";
import { Toolkit } from "@/components/toolkit";
import { getAllPosts, getCategories } from "@/lib/queries";
import Link from "next/link";

export const dynamic = "force-dynamic";

export default async function Home() {
  try {
    // ✅ Safe async fetching
    const categories = await getCategories().catch(() => []);
    const { posts } = (await getAllPosts().catch(() => ({ posts: [] }))) || {
      posts: [],
    };

    return (
      <>
        {/* ✅ No Hero here if it's already in layout */}
        {/* <Hero /> */}

        {/* ✅ Testimonials - Limited width */}
        <section className="max-w-[1200px] mx-auto px-4 md:px-8">
          <Testimonial />
        </section>

        {/* ✅ How I Do Websites - Full width */}
        <FullWidthSection bgColor="bg-white">
          <HowIDo />
        </FullWidthSection>

        {/* ✅ Toolkit - Full width */}
        <FullWidthSection bgColor="bg-gray-50">
          <Toolkit />
        </FullWidthSection>

        {/* ✅ Social Icons - Limited width */}
        <section className="max-w-[1200px] mx-auto px-4 md:px-8">
          <SocialIcons />
        </section>

        {/* ✅ Categories - Limited width */}
        <section className="max-w-[1200px] mx-auto px-4 md:px-8">
          <Categories categories={categories} />
        </section>

        {/* ✅ Latest Posts - Limited width */}
        <section className="max-w-[1200px] mx-auto px-4 md:px-8">
          <LatestPosts posts={posts} />
        </section>

        {/* ✅ View More Blog Link */}
        <div className="text-center mt-12 mb-20">
          <Link
            href="/blog"
            className="inline-block text-gray-800 font-medium hover:underline"
          >
            View More Posts →
          </Link>
        </div>
      </>
    );
  } catch (error) {
    console.error("❌ Failed to render homepage:", error);

    return (
      <section className="py-24 text-center text-gray-600">
        <h2 className="text-2xl font-semibold mb-4">Something went wrong 😞</h2>
        <p>Please try refreshing the page or come back later.</p>
      </section>
    );
  }
}
